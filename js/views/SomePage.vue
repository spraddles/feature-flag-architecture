<template>
    <div>
        <div v-feature-flag="someFeatureFlag">
            <span>Some content here 1</span>
            <span>Some content here 2</span>
            <span>Some content here 3</span>
        </div>
    </div>
</template>

<script lang="js">

import { FEATURES } from '@/constants';

export default SomePage {

  get someFeatureFlag() {
    return FEATURES.EXAMPLE_FEATURE_1;
  }

}

</script>