<script setup>
import { Inertia } from '@inertiajs/inertia'

defineProps({
    // ControllerのKey
    id : String,
    blog : Object
})

const deleteConfirm = id => {
    // JSのテンプレート構文 バックスラッシュで囲む 変数箇所を${}で囲む
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })
    
}
</script>

<template>
    {{ id }}<br>
    {{ blog.title }}<br>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>