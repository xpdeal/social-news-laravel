<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const postForm = useForm({
  title: '',
  post_content: '',
  publised_at: ''
})

const submit = () => {
  postForm.post(route('cms.post.store'), {
    onFinish: () => postForm.reset('title', 'postContent'),
  });
};
</script>
<template>
  <div class="mx-auto mt-10 max-w-xl bg-slate-900 text-white rounded shadow-2xl px-3 py-3">
    <div class="text-lg py-3">
      Formulário para criar POST
    </div>
    <div>
      <form @submit.prevent="submit">
        <div>
          <InputLabel for="title" value="title" />

          <TextInput
              id="title"
              type="text"
              class="mt-1 block w-full"
              v-model="postForm.title"
              required
              autofocus
              autocomplete="title"
          />

          <InputError class="mt-2" :message="postForm.errors.title" />
        </div>

        <div>
          <InputLabel for="post_content" value="post_content" />

          <TextInput
              id="post_content"
              type="text"
              class="mt-1 block w-full"
              v-model="postForm.post_content"
              required
              autofocus
              autocomplete="post"
          />

          <InputError class="mt-2" :message="postForm.errors.post_content" />
        </div>
        <div class="flex items-center justify-end mt-4">

          <PrimaryButton class="ml-4" :disabled="postForm.processing">
            Add new post
          </PrimaryButton>
        </div>
      </form>
    </div>
  </div>
</template>
