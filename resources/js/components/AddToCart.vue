<template>
    <div class="flex items-center justify-between py-4">
        <button 
        class="bg-indigo-500 p-2 text-white"
        @click.prevent="addToCart"
        >
        Ajouter au panier
        </button>
    </div>
</template>

<script setup>
import axios from 'axios';
import useProduct from '../composable/products';
const { add } = useProduct();

    const addToCart = async () => {
        await axios.get('/sanctum/csrf-cookie')
        await axios.get('/api/user').then(async(res) => {
            await add(productId)
        }).catch((err) => {
            console.log(err);
        })
        
    }
    const productId = defineProps(['productId']);
</script>