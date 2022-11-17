<template>
    <div id="user-transaction-list">    
        <h3>Users List</h3>

        <Preloader v-if="loading"></Preloader>

        <table v-if="items && !loading" class="responsive-table centered striped">
            <thead>
            <tr>
                <th>Client ID</th>
                <th>Identication</th>
                <th>Mobile number</th>
                <th>Birthday</th>
                <th>Transactions</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="item in items" :key="item.id">
                <td>{{ item.user_id }}</td>
                <td>{{ item.identification_number }}</td>
                <td>{{ item.mobile_number }}</td>
                <td>{{ item.birth_date }}</td>
                <td>
                    <a @click="viewDetails(item.user_id)" class="waves-effect waves-light btn-small"><i class="material-icons left">dvr</i>Transaction list</a>
                </td>  
            </tr>
            </tbody>
      </table>

    <ul class="pagination" v-if="!loading">       
        <li style="" v-for="(page, index) in internalPages" :key="index" :class="{active : page.active, 'waves-effect' : !page.active, visible:!page.url}"><a href="javascript:;" @click="goPage(page.url)" v-html="page.label"></a></li>               
    </ul>
   
    </div>
</template>
<script>
import { getClients } from '../../Services/TransactionService.js';
import Preloader from '../../components/Preloader.vue';
export default{   
    components:{
        Preloader
    },
    data(){
        return {
            loading:false,
            items: [],
            pagination: []
        }
    },
    mounted(){        
        this.loadData(this.$route.params.page);
    },
    methods:{
        viewDetails(user_id){          
            this.$router.push({ name: 'accounts-details', params: { id: user_id }});
        },
        async loadData(page){
            this.loading = true;                

            try {
                const { data, links } = await getClients(page);
                this.items =  data;            
                this.pagination = links;
                this.loading = false;
            } catch (err){
                alert("Error loading data" + err)
            }
        },
        async goPage(url){                   
            const page = url.split("=")[1];
            await this.$router.push('/accounts/page/'+page);            
            await this.loadData(page)
        }        
    },
    computed:{
        internalPages(){
            return this.pagination
        }
    }
}
</script>
<style scoped>
.visible{
    display: none;
}
</style>