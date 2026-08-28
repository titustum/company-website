---
paths:
  - 'tests/Feature/**'
---

# Feature

## Feature tests need RefreshDatabase (layout hits DB)
The app layout's NavigationComposer queries services/solutions/industries on every render, so any feature test that renders a page (even '/' from ExampleTest) fails with "no such table" unless it uses RefreshDatabase. Always add RefreshDatabase to page-rendering feature tests.
