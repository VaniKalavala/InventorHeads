import { getSiteContent } from "@/lib/cms";

export function SiteFooter() {
  const { contact } = getSiteContent();

  return (
    <footer className="site-footer">
      <div>
        <strong>Inventor Heads</strong>
        <p>Creative technology, production, and post-production workflows.</p>
      </div>
      <address>
        <span>{contact.location}</span>
        <a href={`mailto:${contact.email}`}>{contact.email}</a>
      </address>
    </footer>
  );
}
