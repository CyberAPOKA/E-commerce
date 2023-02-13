<script setup>
import Header from "@/Pages/Site/Layouts/Header.vue";
import Footer from "@/Pages/Site/Layouts/Footer.vue";
</script>
<template>
  <Header></Header>
  <div class="main-content">
    <slot></slot>
  </div>
  <Footer></Footer>
</template>