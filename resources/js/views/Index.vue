<template>
  <h1>Welcome!</h1>
</template>

<script>

  export default {
    data: () => ({
        form: {
          email: '',
          name: '',
        },
        show: true
    }),
    methods: {
      store() {
          this.loading = true;
          axios.post('/api/login', this.form, {
              headers: {
                  "Content-type": "application/json"
              }
          })
          .then(res => {
              this.$router.push('/index');
          })
      }
    }
  }
</script>
