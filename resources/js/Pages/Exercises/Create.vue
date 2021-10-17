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
                            <h2 class="text-lg text-gray-900">Esto no esta funcionando, ni es necesario</h2>
                            <p class="text-sm text-gray-600">Podras crear una nueva actividad</p>
                        </div>
                    </div>
                    <div class="md:col-span-4 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">
                                    Resumen
                                </label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.title"
                                > </textarea>

                                <label class="block font-medium text-sm text-gray-700">
                                    Contenido
                                </label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.description"
                                    rows="8"
                                > </textarea>
                                <button 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                                >Crear</button>
                            </form>
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
        data () {
            return {
                form: {
                    title: '',
                    description: '',
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.route('exercises.store'), this.form)
            }
        }
    })
</script>