# Backend

This folder holds backend-side or server-managed project code.

## `legacy-wordpress`

The original PHP/WordPress theme files were moved here after the Next.js rebuild. Treat this folder as a migration reference for:

- old WordPress templates
- custom post type registrations
- ACF field usage
- Contact Form 7 shortcode usage
- legacy images, CSS, JavaScript, and theme assets

The active frontend is in `Frontend`. CMS schema planning is in `cms`.

If a new backend is added later, create it as a separate folder here, for example `Backend/api` or `Backend/cms`.
