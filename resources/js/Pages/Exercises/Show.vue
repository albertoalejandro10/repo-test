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
                            <h2 class="text-sm text-gray-600">Detalle de una actividad</h2>
                            <p class="text-xl text-blue-900 text-bold">{{ exercise.title }}</p>
                        </div>
                    </div>
                    <div class="md:col-span-3 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <table>
                                <thead class="text-center text-uppercase font-bold">
                                    <td class="border px-4 py-2">Descripción</td>
                                    <td class="border px-4 py-2">Precio</td>
                                    <td class="border px-4 py-2">Popularidad</td>
                                    <td class="border px-4 py-2">Rango de fecha</td>
                                </thead>
                                <tr>
                                    <td class="border px-4 py-2">
                                        📋 {{ exercise.description }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        $ {{ exercise.price }}
                                    </td>
                                    <td class="border px-4 py-2 text-center">
                                        🎉 {{ exercise.popularity }}
                                    </td>
                                    <td class="border px-4 py-2 text-sm">
                                        📆 {{ exercise.startDate }} al {{ exercise.endDate }}
                                    </td>
                                </tr>
                            </table>

                            <hr class="my-6">

                            <form @submit.prevent="submit">
                                <label for="numberPeople" class="text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Numero de personas</label>
                                <input id="numberPeople"  v-model="form.numberPeople" class="bg-gray-200 border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" />
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Comprar</button>
                            </form>

                            <hr class="my-6">

                            <Link 
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-5"
                            :href="route('exercises.index')">
                                Volver
                            </Link>
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
            exercise: Object,
        },
        data () {
            return {
                form: {
                    reference: this.exercise.title,
                    numberPeople: null,
                    reservePrice: this.exercise.price,
                    reserveDate: new Date(Date.now()).toDateString(),
                    startDate: this.exercise.startDate,
                    endDate: this.exercise.endDate,
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.route('reservations.store'), this.form)
            },
        },
    })
</script>
