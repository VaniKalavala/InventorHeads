# Inventor Heads CMS Migration

The old WordPress theme stored content across pages, custom post types, ACF fields, menus, and plugin shortcodes. The rebuilt frontend uses a clean content model in `Frontend/content/site.ts` while the final CMS is selected.

Recommended CMS options:

- Sanity: best fit for editorial flexibility, previews, and hosted content APIs.
- Payload: best fit if you want a self-hosted TypeScript CMS alongside the app.
- Strapi: good if the team prefers a traditional admin panel and REST/GraphQL APIs.

## Migrated Content Types

| WordPress source | New collection | Notes |
| --- | --- | --- |
| Pages | `pages` | Home, About, Portfolio, Shows, Technology, Services, Careers, Team, Contact |
| `portfolio_type` | `portfolio` | Project title, category, image, description, video/download fields |
| `Service_type` / `service_type` | `services` | Normalized naming to `services` |
| `technology_type` | `technologies` | Supports category-like grouping such as Workflow Tools and Streamliner |
| `careers_type` | `careers` | Replaces career pages and Contact Form 7 application shortcode |
| `Team_type` / `team_type` | `team` | Profile image, role, short description, biography |
| `Show_type` | `shows` | Category, thumbnail, video embed/link |
| ACF fields | schema fields | `video`, `videos`, `short_description`, `experience`, `video_link`, `map`, `cimage` |

## WooCommerce Removal

WooCommerce template overrides and the bundled `woocommerce.zip` have been removed from the repository. If ecommerce returns later, use Shopify or a headless commerce service rather than reintroducing theme-level checkout templates.

## Next Step

Export the live WordPress database content with the WordPress REST API, WP All Export, or a SQL dump, then map each record into the schemas in `cms/schemas`.
