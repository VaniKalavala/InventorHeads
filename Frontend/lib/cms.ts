import { siteContent } from "@/content/site";

export type CollectionName =
  | "services"
  | "technologies"
  | "careers"
  | "shows"
  | "team"
  | "portfolio";

export function getSiteContent() {
  return siteContent;
}

export function getCollection<TName extends CollectionName>(name: TName) {
  return siteContent.collections[name];
}

export function getPage<TSlug extends keyof typeof siteContent.pages>(slug: TSlug) {
  return siteContent.pages[slug];
}
