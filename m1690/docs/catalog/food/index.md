---
layoutClass: m-nav-layout
outline: [2, 3, 4]
---

<script setup>
import { NAV_DATA } from './data'
</script>
<style src="../style/index.scss"></style>

# Еда и продукты
Каталог сервисов и служб осуществляющих доставку еды и продуктов питания <br/>
по территории Макеевки, Донецка и прилегающих поселков

<MNavLinks v-for="{title, items} in NAV_DATA" :title="title" :items="items"/>

<br />
