<template>
  <div>
    <b-form v-if="show">
      <b-form-group
        id="input-group-1"
        label="Email address:"
        label-for="input-1"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          placeholder="Enter email"
          required
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-2" label="Your Name:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.name"
          placeholder="Enter name"
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary" @click.prevent="store">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
  </div>
</template>

<script>
  import axios from 'axios';

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
