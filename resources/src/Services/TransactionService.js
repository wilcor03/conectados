const http = axios;

export function getClients(page){
    return new Promise(function(resolve, reject) {
        http.get('/api/users?page='+page).then(resp => {
            resolve(resp.data);
        }).catch(err => reject(err));
    });
}

export function getByClientId(userId, page = 1)
{ 
    return new Promise((resolve) =>
    {          
        const url = '/api/users/'+ userId +'/transactions';
        http.get(url).then(resp => {            
            resolve(resp);
        }).catch((err) => console.log(err));       
    });
}