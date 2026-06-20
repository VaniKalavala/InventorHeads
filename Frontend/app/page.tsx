import Link from "next/link";
import { ContentCard } from "@/components/content-card";
import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

export default function HomePage() {
  const page = getPage("home");
  const portfolio = getCollection("portfolio");
  const services = getCollection("services").slice(0, 3);

  return (
    <>
      <PageHero
        eyebrow={page.eyebrow}
        title={page.title}
        summary={page.summary}
        image={page.heroImage}
      />
      <section className="section section--white">
        <div className="section-inner split">
          <SectionHeading
            eyebrow="Migration complete"
            title="A modern frontend for the old WordPress site"
            summary="The original PHP templates are now represented as typed content collections and reusable page components."
          />
          <div className="panel">
            <h2>WooCommerce removed</h2>
            <p>
              Store templates and checkout overrides have been removed from the
              codebase. The new site is focused on studio pages, work, services,
              shows, technology, careers, and contact flows.
            </p>
            <div className="actions">
              <Link className="button" href="/portfolio">
                View Portfolio
              </Link>
              <Link className="button button--secondary" href="/contact">
                Contact Studio
              </Link>
            </div>
          </div>
        </div>
      </section>
      <section className="section">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Featured"
            title="Portfolio"
            summary="A cleaner structure for case studies, reels, and video-led work."
          />
          <div className="grid">
            {portfolio.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                image={item.image}
                label={item.category}
              />
            ))}
          </div>
        </div>
      </section>
      <section className="section section--white">
        <div className="section-inner">
          <SectionHeading
            eyebrow="What we do"
            title="Services"
            summary="Migrated from the old service_type WordPress records into a CMS-ready collection."
          />
          <div className="grid">
            {services.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                image={item.image}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
