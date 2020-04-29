<template>
  <section>
    <h2>Users</h2>
    <ul>
      <li v-for="user in users" :key="user.id">
        <h3>{{ user.name }}</h3>
        <p>
          <a :href="'mailto:' + user.email">
            {{ user.email }}
          </a>
        </p>
      </li>
    </ul>
  </section>
</template>

<script>
  export default {
    name: 'users-component',
    data ()
    {
      return {
        users: []
      }
    },
    // Runs when the component is first set up!
    mounted ()
    {
      // AJAX request for users.
      fetch( '/laravel-vue-api/public/api/users' )
        // Convert users data to a JS object.
        .then( response => response.json() )
        // Store data in our component "data."
        .then( data => {
          this.users = data;
        } )
    }
  }
</script>

<style></style>