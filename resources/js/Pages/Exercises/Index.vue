<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Actividades
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h2 class="text-xl text-gray-900">Listado de Actividades</h2>
                            <p class="text-md text-gray-600">Registro correcto de Actividades</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <div class="flex justify-between">

                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar por titulo" v-model="q">

                            </div>
                            <hr class="my-6">
                            <table>
                                <thead>
                                    <th class="border px-4 py-2">Titulo</th>
                                    <th class="border px-4 py-2">Precio</th>
                                </thead>
                                <tr v-for="exercise in exercises" :key="exercise.id">
                                    <td class="border px-4 py-2">
                                        🎫 {{ exercise.title }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        $ {{ exercise.price }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link 
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6"
                                            :href="route('exercises.show', exercise.id)">
                                            Ver
                                        </Link>
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link 
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-5"
                                            :href="route('exercises.edit', exercise.id)">
                                            Editar
                                        </Link>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Link,
        },
        props: {
            exercises: Array,
        },
        data() {
            return {
                q: '',
            }
        },
        watch: {
            q: function(value) {
                this.$inertia.replace(this.route('exercises.index', {q: value}))
            }
        }
    })
</script>
