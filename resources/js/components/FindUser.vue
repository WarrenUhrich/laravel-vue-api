<template>
  <section>
    <h2>Find a User by ID</h2>
    <form @submit="search" action="#" method="GET">
      <label for="id">
        User ID:
        <input type="number" name="id" id="id" v-model="userId">
      </label>
      <input type="submit" value="Find User">
    </form>
    <dl v-if="user">
      <dt>Name</dt>
      <dd>{{ user.name }}</dd>
      <dt>E-Mail Address</dt>
      <dd>{{ user.email }}</dd>
    </dl>
    <p v-else>
      User not found.
    </p>
  </section>
</template>

<script>
  export default {
    name: 'find-user',
    data () {
      return {
        userId: '',
        user: false
      }
    },
    methods: {
      search ( event )
      { // Make sure our form doesn't refresh the page.
        event.preventDefault();
        // Convert user ID from string/float to integer.
        const userId = parseInt( this.userId );
        // Search for the user. // NOTE: ${} syntax is a "template literal."
        axios.get( `/laravel-vue-api/public/api/user/${userId}` )
          .then( response => {
            // console.log( response );
            // Get the user from the response.
            const user = response.data;
            // Store the user in our data.
            this.user = user;
          } )
          .catch( error => { // CATCH is used for a request FAILURE.
            // The user wasn't found; so set our data to false!
            this.user = false;
            // Output the error message to console log for easy debugging.
            console.log( error );
          } )
      }
    }
  }
</script>

<style>
</style>