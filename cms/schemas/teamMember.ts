export default {
  name: "teamMember",
  title: "Team Member",
  type: "document",
  fields: [
    { name: "name", title: "Name", type: "string" },
    { name: "slug", title: "Slug", type: "slug", options: { source: "name" } },
    { name: "role", title: "Role", type: "string" },
    { name: "image", title: "Image", type: "image" },
    { name: "shortDescription", title: "Short Description", type: "text" },
    { name: "bio", title: "Biography", type: "array", of: [{ type: "block" }] }
  ]
};
