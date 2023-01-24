<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import InputError from '@/Components/Form/InputError.vue';
import InputLabel from '@/Components/Form/InputLabel.vue';
import TextInput from '@/Components/Form/TextInput.vue';
import {useForm} from '@inertiajs/vue3';
import PostCardLogo from "@/Components/PostCardLogo.vue";


const postCardForm = useForm({
    recipientName: '',
    street1: '',
    street2: '',
    city: '',
    state: '',
    zip: '',
    message: '',
});

const submit = () => {
    postCardForm.post(route('postcards.store'), {
        onFinish: () => postCardForm.reset(),
    });
};
</script>

<template>
    <AppLayout>

        <div class="grid grid-cols-2 gap-2">
            <!-- form -->
            <div class="grid col-span-1 bg-slate-100 p-10">
                <PostCardLogo class="w-194 h-29 pb-10" />
                <form @submit.prevent="submit">
                    <div class="pl-1 pr-1">
                        <InputLabel for="recipientName" value="Recipient Name" />

                        <TextInput
                            id="recipientName"
                            type="text"
                            class="mt-1 block w-full"
                            :class="{ 'border-red-300': postCardForm.errors.recipientName }"
                            v-model="postCardForm.recipientName"
                            required
                            autofocus
                            autocomplete="recipientName"
                        />

                        <InputError class="mt-2" :message="postCardForm.errors.recipientName" />
                    </div>

                    <div class="mt-4 pl-1 pr-1">
                        <InputLabel for="street1" value="Street 1" />

                        <TextInput
                            id="street1"
                            type="text"
                            class="mt-1 block w-full"
                            :class="{ 'border-red-300': postCardForm.errors.street1 }"
                            v-model="postCardForm.street1"
                            required
                            autocomplete="street1"
                        />

                        <InputError class="mt-2" :message="postCardForm.errors.street1" />
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-4 pl-1 pr-1">
                            <InputLabel for="street2" value="Street 2" />

                            <TextInput
                                id="street1"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-300': postCardForm.errors.street2 }"
                                v-model="postCardForm.street2"
                                required
                                autocomplete="street2"
                            />

                            <InputError class="mt-2" :message="postCardForm.errors.street2" />
                        </div>
                        <div class="mt-4 pl-1 pr-1">
                            <InputLabel for="city" value="City" />

                            <TextInput
                                id="city"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-300': postCardForm.errors.city }"
                                v-model="postCardForm.city"
                                required
                                autocomplete="city"
                            />

                            <InputError class="mt-2" :message="postCardForm.errors.city" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-4 pl-1 pr-1">
                            <InputLabel for="state" value="State" />

                            <TextInput
                                id="state"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-300': postCardForm.errors.state }"
                                v-model="postCardForm.state"
                                required
                                autocomplete="state"
                            />

                            <InputError class="mt-2" :message="postCardForm.errors.state" />
                        </div>
                        <div class="mt-4 pl-1 pr-1">
                            <InputLabel for="zip" value="ZipCode" />

                            <TextInput
                                id="zip"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-300': postCardForm.errors.zip }"
                                v-model="postCardForm.zip"
                                required
                                autocomplete="zip"
                            />

                            <InputError class="mt-2" :message="postCardForm.errors.zip" />
                        </div>
                    </div>
                    <div class="mt-4 pl-1 pr-1">
                        <InputLabel for="message" value="Message" />

                        <textarea
                            id="message"
                            type="text"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                            :class="{ 'border-red-300': postCardForm.errors.message }"
                            rows="5"
                            v-model="postCardForm.message"
                            required
                            autocomplete="zip"
                        />

                        <InputError class="mt-2" :message="postCardForm.errors.message" />
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <button class="bg-blue-400 hover:bg-blue-600 uppercase text-white rounded px-6 py-1 ml-4"
                                :class="{ 'opacity-25': postCardForm.processing }"
                                :disabled="postCardForm.processing">
                            Save
                        </button>

                        <button class="bg-white hover:bg-gray-50 uppercase text-black rounded px-6 py-1 ml-4"
                                :class="{ 'opacity-25': postCardForm.processing }"
                                :disabled="postCardForm.processing">
                            Copy Link
                        </button>
                    </div>
                </form>
            </div>
            <!-- preview -->
            <div class="grid col-span-1">
                <div class="flex flex-col p-20 bg-blue-400">
                    <div class="flex justify-items-center justify-center pb-8">
                        <span class="text-6xl text-gray-50 opacity-50">
                            Preview
                        </span>
                    </div>
                    <div class="flex h-1/2 bg-white">
                        <div class="p-5" v-if="postCardForm.message">
                            {{ postCardForm.message }}
                        </div>
                    </div>
                    <div class="flex justify-items-center justify-center pt-5">
                        <div class="bg-white rounded-lg">
                            <div class="flex items-center justify-end mt-1 mb-1">
                                <button
                                    class="bg-gray-600 hover:bg-gray-600 uppercase text-white rounded px-6 py-1 ml-4"
                                    :class="{ 'bg-white hover:bg-gray-50': postCardForm.processing }"
                                    :disabled="postCardForm.processing">
                                    Save
                                </button>

                                <button class="bg-white hover:bg-gray-50 uppercase text-black rounded px-6 py-1 ml-4"
                                        :class="{ 'bg-teal-400 hover:bg-teal-600': postCardForm.processing }"
                                        :disabled="postCardForm.processing">
                                    Copy Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>
