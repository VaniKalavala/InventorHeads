export default {
  name: "service",
  title: "Service",
  type: "document",
  fields: [
    { name: "title", title: "Title", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "title" } },
    { name: "image", title: "Image", type: "image" },
    { name: "description", title: "Description", type: "text" },
    { name: "body", title: "Body", type: "array", of: [{ type: "block" }] }
  ]
};
