import Link from "next/link";
import { getSiteContent } from "@/lib/cms";

export function SiteFooter() {
  const { contact, footerNavigation } = getSiteContent();

  return (
    <footer className="site-footer">
      <div>
        <strong>Inventor Heads</strong>
        <p>Creative technology, production, and post-production workflows.</p>
      </div>
      <nav className="footer-nav" aria-label="Footer navigation">
        {footerNavigation.map((item) => (
          <Link key={item.href} href={item.href}>
            {item.label}
          </Link>
        ))}
      </nav>
      <address>
        <span>{contact.location}</span>
        <a href={`mailto:${contact.email}`}>{contact.email}</a>
      </address>
    </footer>
  );
}
