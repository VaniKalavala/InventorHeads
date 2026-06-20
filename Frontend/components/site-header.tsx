import Link from "next/link";
import Image from "next/image";
import { getSiteContent } from "@/lib/cms";

export function SiteHeader() {
  const { navigation } = getSiteContent();

  return (
    <header className="site-header">
      <Link href="/" className="brand" aria-label="Inventor Heads home">
        <Image
          className="brand-logo"
          src="/images/logo.png"
          alt="Inventor Heads"
          width={180}
          height={64}
          priority
        />
      </Link>
      <nav className="main-nav" aria-label="Primary navigation">
        {navigation.map((item) => (
          <Link key={item.href} href={item.href}>
            {item.label}
          </Link>
        ))}
      </nav>
    </header>
  );
}
