<template>
  <div>
    <h1>Contact us</h1>
    <form>
      <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name">
      </div>

        <div class="mb-3">
          <label class="form-label" for="email">email</label>
          <input class="form-control" type="email" name="email" id="email">
        </div>

      <div class="mb-3">
          <label class="form-label" for="Message">Message</label>
          <textarea class="form-control" name="Message" id="Message" cols="30" rows="10"></textarea>
      </div>
      <div>
        <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" checked>
        <label for="newsletter" class="form-check-label">Iscrivimi alla newsletter</label>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
</template>

<script>
export default {
    name: 'PageContacts',
}
</script>

<style lang="scss" scoped>

</style>
