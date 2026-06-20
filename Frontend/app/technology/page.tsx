import Image from "next/image";
import Link from "next/link";
import { getCollection, getPage } from "@/lib/cms";

const technologyTabs = [
  { label: "Technology", href: "/technology" },
  { label: "Workflow Tools", href: "/technology#workflow-tools" },
  { label: "Streamliner", href: "/technology#streamliner" }
];

export default function TechnologyPage() {
  const page = getPage("technology");
  const technologies = getCollection("technologies");

  return (
    <section
      className="legacy-technology"
      style={{ backgroundImage: `url(${page.heroImage})` }}
    >
      <div className="legacy-technology__shade" />
      <div className="legacy-technology__inner">
        <nav className="legacy-subnav" aria-label="Technology sections">
          {technologyTabs.map((item) => (
            <Link key={item.href} href={item.href}>
              {item.label}
            </Link>
          ))}
        </nav>

        <div className="legacy-page-title">
          <p>Inventor Heads</p>
          <h1>{page.title}</h1>
        </div>

        <div className="legacy-publications" id="technology-list">
          {technologies.map((item) => (
            <article
              className="legacy-publication"
              id={item.category.toLowerCase().replace(/\s+/g, "-")}
              key={item.title}
            >
              <div className="legacy-publication__image">
                <Image src={item.image} alt="" width={360} height={240} />
              </div>
              <div className="legacy-publication__content">
                <header>
                  <p>{item.category}</p>
                  <h2>{item.title}</h2>
                </header>
                <div className="legacy-publication__body">
                  <p>{item.description}</p>
                </div>
                <div className="legacy-share">
                  <span>Share :</span>
                  <a aria-label={`Share ${item.title} on Facebook`} href="#">
                    f
                  </a>
                  <a aria-label={`Share ${item.title} on X`} href="#">
                    x
                  </a>
                  <a aria-label={`Share ${item.title} by email`} href="#">
                    @
                  </a>
                </div>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}
