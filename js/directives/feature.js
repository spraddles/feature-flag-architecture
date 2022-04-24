const directive = {
  mounted: (el, binding) => {
    // code here that:
    // takes the feature string parameter from the 'v-feature-flag=someString'
    // checks the current user permissions endpoint for this matching string
    // if feature string exists, return true
    // else return false
  }
};

export default directive;
