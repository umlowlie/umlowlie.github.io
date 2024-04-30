<script setup lang="ts">
import { computed } from 'vue'
import { slugify } from '@mdit-vue/shared'

import MNavLink from './MNavLink.vue'
import type { NavLink } from '../types'

const props = defineProps<{
  title: string
  items: NavLink[]
}>()

const formatTitle = computed(() => {
  return slugify(props.title)
})
</script>

<template>
  <h2 v-if="title" :id="formatTitle" tabindex="-0">
    {{ title }}
    <a class="header-anchor" :href="`#${formatTitle}`" aria-hidden="true"></a>
  </h2>
  <div class="m-nav-links">
    <MNavLink
      v-for="{ icon, title, desc, link, phone, shortphone } in items"
      :key="link"
      :icon="icon"
      :title="title"
      :desc="desc"
      :link="link"
      :phone="phone"
      :shortphone="shortphone"
    />
  </div>
</template>

<style lang="scss" scoped>
.m-nav-links {
  --m-nav-gap: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
  grid-row-gap: var(--m-nav-gap); // Вертикальное расстояние  
  grid-column-gap: var(--m-nav-gap); // горизонтальное рассто
  grid-auto-flow: row dense;
  justify-content: center;
  margin-top: var(--m-nav-gap);
}

@each $media, $size in (500px: 200px, 640px: 200px, 768px: 210px, 960px: 220px, 1440px: 230px) {
  @media (min-width: $media) {
    .m-nav-links {
      grid-template-columns: repeat(auto-fill, minmax($size, 1fr));
    }
  }
}

@media (min-width: 960px) {
  .m-nav-links {
    --m-nav-gap: 16px;
  }
}
</style>
