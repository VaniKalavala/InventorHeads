export default {
  name: "career",
  title: "Career",
  type: "document",
  fields: [
    { name: "title", title: "Title", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "title" } },
    { name: "type", title: "Type", type: "string" },
    { name: "experience", title: "Experience", type: "string" },
    { name: "description", title: "Description", type: "text" },
    { name: "body", title: "Body", type: "array", of: [{ type: "block" }] }
  ]
};
