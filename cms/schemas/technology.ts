export default {
  name: "technology",
  title: "Technology",
  type: "document",
  fields: [
    { name: "title", title: "Title", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "title" } },
    { name: "category", title: "Category", type: "string" },
    { name: "image", title: "Image", type: "image" },
    { name: "description", title: "Description", type: "text" },
    { name: "body", title: "Body", type: "array", of: [{ type: "block" }] }
  ]
};
