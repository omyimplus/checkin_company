export default [ {
  path: '/employee',
  name: 'employee',
  component: () => import(/* webpackChunkName: "users-list" */ '@/pages/employee/EmployeePage.vue')
}, ]
