const AccountList = () => import ('../src/Pages/Accounts/AccountList.vue')
const AccountDetails = () => import ('../src/Pages/Accounts/AccountDetails.vue')
const routes = [
  {
    path: '/',    
    redirect: "/accounts/page/1"
  },
  {
      name:'accounts',
      path:'/accounts/page/:page',
      component: AccountList
  },
  {
      name:'accounts-details',
      path:'/accounts/:id',
      component: AccountDetails
  }
];

export default routes;