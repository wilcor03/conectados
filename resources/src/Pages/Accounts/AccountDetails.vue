<template>
<div id="transactions-list">
    <div class="back-button">
        <a @click="goList" class="btn-floating btn-large waves-effect waves-light red scale-transition"><i class="material-icons">chevron_left</i></a>
    </div>

    <h3>Transactions</h3>       

    <Preloader v-if="loading"></Preloader>

    <table v-if="items && items.length && !loading" class="responsive-table centered striped">
        <thead>
        <tr>
            <th>Trans ID</th>
            <th>Detail</th>
            <th>Amount</th>
            <th>Year</th>
            <th>Month</th>
            <th>Status</th>
            <th>Transc date</th>
        </tr>
        </thead>

        <tbody>
        <tr v-for="item in dateSortingData" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.transaction_detail }}</td>
            <td>{{ item.amount }}</td>
            <td>{{ item.year }}</td>
            <td>{{ item.shortNameMonth }}</td>
            <td>{{ item.transaction_status_id }}</td>      
            <td>{{ item.created_at }}</td>            
        </tr>
        </tbody>
    </table>

    <NoResults v-if="items && !items.length && !loading"></NoResults>    
</div> 
</template>
<script>
import { getByClientId } from '../../Services/TransactionService.js';
import Preloader from '../../components/Preloader.vue';
import NoResults from '../../components/NoResults.vue' 
export default{   
    components: {
        Preloader,
        NoResults
    },
    data(){
        return {
            loading:false,
            items: []
        }
    },
    mounted(){                
        this.loadData();        
    },
    methods:{       
        goList(){
            this.$router.back({ name: 'accounts' });
        },
        async loadData(){
            const userId = this.$route.params.id;
            this.loading = true;
            const { data } = await getByClientId(userId);            
            this.items = data;
            this.loading = false;                        
        }

    },
    computed:{
        dateSortingData(){
            const items = this.items.map(item => {
                item.parseDate = new Date(item.created_at);
                item.shortNameMonth = new Date(item.month + ' 25, 2022 23:15:30').toLocaleDateString('en-us', {month:"short"})
                return item;
            });
            
            return items.sort((a,b) => Number(b.parseDate) - Number(a.parseDate),);
        }
    }
}
</script>
<style scoped>
.back-button{
    margin-top:15px;
}
</style>