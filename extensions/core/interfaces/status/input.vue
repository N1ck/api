<template>
  <div class="interface-status">
    <v-radio
      v-for="(options, key) in optionValues"
      :id="`${fields[name].collection}-${name}-${key}`"
      :name="name"
      :value="key"
      :key="key"
      :disabled="readonly"
      :model-value="String(value)"
      :label="$t(options.name)"
      :checked="key == value"
      @change="$emit('input', $event)"></v-radio>
  </div>
</template>

<script>
import mixin from "../../../mixins/interface";

export default {
  name: "interface-status",
  mixins: [mixin],
  computed: {
    optionValues() {
      if (typeof this.options.status_mapping === "string") {
        return this.options.status_mapping
          ? JSON.parse(this.status_mapping)
          : {};
      }

      return this.options.status_mapping || {};
    }
  }
};
</script>

<style lang="scss" scoped>
.interface-status {
  max-width: var(--width-x-large);
  .v-radio {
    display: inline-block;
    margin-right: 40px;
    margin-bottom: 20px;
  }
}
</style>
