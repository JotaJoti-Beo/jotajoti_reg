<template>
    <div class="form-group row mb-0">
        
    </div>
</template>

<script>
export default {
    name: "ButtonSubmit",
    props: {
        label: { type: String, default: function () { return this.$t('t.global.save') } },
    }
}
</script>

<style scoped></style>
