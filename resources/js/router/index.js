
import {createWebHistory, createRouter} from "vue-router";

 
import Home from '../pages/Home';
import NewsDetail from '../pages/news/NewsDetail';
import NewsList from '../pages/news/NewsList';
import About from '../pages/About';
import Dashboard from '../pages/Dashboard';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'news',
        path: '/news',
        component: NewsList
    }, {
        name: 'newsDetail',
        path: '/news/:slug',
        component: NewsDetail
    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;