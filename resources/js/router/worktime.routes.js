export default [ {
  path: '/worktime',
  name: 'worktime',
  component: () => import(/* webpackChunkName: "users-list" */ '@/pages/worktime/WorktimePage.vue')
}, ]
