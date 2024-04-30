<script setup lang="ts">
import { computed } from 'vue'
import { withBase } from 'vitepress'
import { slugify } from '@mdit-vue/shared'

import { NavLink } from '../types'

const props = defineProps<{
  icon?: NavLink['icon']
  title?: NavLink['title']
  desc?: NavLink['desc']
  link: NavLink['link']
  phone?: NavLink['phone']
  shortphone?: NavLink ['shortphone']
}>()

const formatTitle = computed(() => {
  if (!props.title) {
    return ''
  }
  return slugify(props.title)
})

const svg = computed(() => {
  if (typeof props.icon === 'object') return props.icon.svg
  return ''
})
</script>

<template>
  <a v-if="link" class="m-nav-link" :href="link" target="_blank" rel="noreferrer">
    <article class="box">
        <div v-if="icon && typeof icon === 'string'" class="icon">
          <img
            :src="withBase(icon)"
            :alt="title"
            onerror="this.parentElement.style.display='none'"
          />
        </div>
      <div class="box-header">
        <h5 v-if="title" :id="formatTitle" class="title">{{ title }}</h5>
      </div>
      <p v-if="desc" class="desc">{{ desc }}</p>
    
      <div class="contact">
        <p v-if="phone" class="phone">{{ phone }}</p>
        <p v-if="shortphone" class="phone">{{ shortphone }}</p>  </div>
    </article>
  </a>
</template>

<style lang="scss" scoped>
.m-nav-link {
  --m-nav-icon-box-size: 40px;
  --m-nav-icon-size: 24px;
  --m-nav-box-gap: 12px;

  display: block;
  border: 1px solid var(--vp-c-bg-soft);
  border-radius: 8px;
  height: 100%;
  text-decoration: inherit;
  background-color: var(--vp-c-bg-alt);
  transition: all 0.25s;
  &:hover {
    text-decoration: initial;
    background-color: var(--vp-c-bg);
  }

  .box {
    display: flex;
    flex-direction: column;
    padding: calc(var(--m-nav-box-gap) - 10px);
    height: 100% ;
    color: var(--vp-c-text-1);
    &-header {
      display: flex;
      align-items: center;
    }
  }

  .icon {
    display: inline-flex;
    margin-right: calc(var(--m-nav-box-gap) - 2px);
    border-radius: 6px 6px 0px 0px;
    width: 100%;
    height: 160px;
    font-size: var(--m-nav-icon-size);
    background-color: var(--vp-c-default-soft);
    transition: background-color 0.25s;
    :deep(svg) {
      width: var(--m-nav-icon-size);
      fill: currentColor;
    }
    :deep(img) {
      object-fit:cover;
      justify-content: center;
      align-items: center;
      border-radius: 8px 0px 0px 0px;
    }
  }

  .title {
    padding: 16px 0px 0px 16px;
    overflow: hidden;
    flex-grow: 1;
    white-space: nowrap;
    text-overflow: ellipsis;
    line-height: var(--m-nav-icon-box-size);
    font-size: 16px;
    font-weight: 600;
  }

  .desc {
    padding: 0px 16px 16px 16px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    flex-grow: 1;
    margin: calc(var(--m-nav-box-gap) - 2px) 0 0;
    line-height: 1.5;
    font-size: 12px;
    color: var(--vp-c-text-2);
  }
}

.contact
{
    padding: 20px 8px 16px 16px;
    border-radius: 8px;
     display: flex;
     flex-direction: column;
     gap: -2px;
     align-self: bottom;
     justify-content: bottom; 
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.5;
    font-size: 12px;
    color: var(--vp-c-text-2);
    word-wrap: break-word;
  }

.phone {
    border-radius: 8px;
     display: flex;
     align-self: bottom;
     justify-content: bottom; 
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: calc(var(--m-nav-box-gap) - 8px) 0 0;
    line-height: 1.5;
    font-size: 12px;
    color: var(--vp-c-text-2);
    word-wrap: break-word;
  }

@media (max-width: 1920px) {
  .m-nav-link {
    --m-nav-icon-box-size: 100%
    ;
    --m-nav-icon-size: 20px;
    --m-nav-box-gap: 8px;

    .title {
      font-size: 14px;
    }
  }
}
</style>
