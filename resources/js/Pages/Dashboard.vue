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
                    <div class="md:col-span-4 mt-5 md:mt-0">
                        <div class="flex shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <div class="md:col-span-2">
                                    <label for="date" class="font-bold mb-1 text-gray-700 block">Desde</label>
                                    <input type="date">
                                </div>
                                <div class="md:col-span-2">
                                    <label for="date" class="font-bold mb-1 text-gray-700 block">Hasta</label>
                                    <input type="date">
                                </div>

                                <button 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                                >Buscar</button><br>
                                No pude hacer que funcionara 😥 <br>
                                Presiona el enlace actividades en el navbar
                            </form>
                            <hr class="my-6">
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
        // 
        // props: {
        //     exercises: Array,
        // },
        // data () {
        //     return {
        //         form: {
        //             startDate: this.exercise.startDate,
        //             endDate: this.exercise.endDate,
        //         }
        //     }
        // },
        // methods: {
        //     submit() {
        //         this.$inertia.get(this.route('exercises.search', this.exercise.startDate, this.exercise.endDate), this.form)
        //     }
        // }
    })
</script>
