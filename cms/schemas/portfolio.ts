export default {
  name: "portfolio",
  title: "Portfolio",
  type: "document",
  fields: [
    { name: "title", title: "Title", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "title" } },
    { name: "category", title: "Category", type: "string" },
    { name: "image", title: "Image", type: "image" },
    { name: "description", title: "Description", type: "text" },
    { name: "videoUrl", title: "Video URL", type: "url" },
    { name: "downloadUrl", title: "Download URL", type: "url" }
  ]
};
