<template>
  <div class="daily-task-list">
    <div class="daily-task-list__header">
      <i class="fas fa-angle-left"></i>
      <i class="fas fa-calendar-alt"></i> {{ currentDate }}
      <i class="fas fa-angle-right"></i>
    </div>
  </div>
</template>

<script>
import moment from 'moment'
export default {
  name: 'daily-task-list',
  data () {
    return {
      currentDate: ''
    }
  },
  mounted () {
    this.currentDate = moment().format('MMMM Do YYYY')
  }
}
</script>

<style lang="scss">
</style>
