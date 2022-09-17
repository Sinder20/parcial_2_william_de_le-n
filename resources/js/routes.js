const Mostrar = () => import('./components/estudiante/Mostrar.vue')
const Crear = () => import('./components/estudiante/Crear.vue')

export const routes = [
    {
        name: 'mostrarEstudiantes',
        path: '/estudiante',
        component: Mostrar
    },
    {
        name: 'crearEstudiante',
        path: '/crear',
        component: Crear
    }

]