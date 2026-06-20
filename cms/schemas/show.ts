export default {
  name: "show",
  title: "Show",
  type: "document",
  fields: [
    { name: "title", title: "Title", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "title" } },
    { name: "category", title: "Category", type: "string" },
    { name: "image", title: "Thumbnail", type: "image" },
    { name: "description", title: "Description", type: "text" },
    { name: "videoUrl", title: "Video URL", type: "url" }
  ]
};
