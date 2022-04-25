# Feature flag architecture  
- an example setup of how to architect feature flags, including backend &amp; frontend handling  
- backend options, using Laravel 8 & Vue 3:
- 1. create a table in the database for features (ID, Feature string, Name, Expires at, Enabled from) and manually update the table with feature status  
- 2. use a static PHP file to record the active state of the feature (True / False) 