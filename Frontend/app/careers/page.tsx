import Link from "next/link";
import { ContentCard } from "@/components/content-card";
import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

export default function CareersPage() {
  const page = getPage("careers");
  const careers = getCollection("careers");

  return (
    <>
      <PageHero title={page.title} summary={page.summary} image={page.heroImage} />
      <section className="section">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Careers"
            title="Open paths"
            summary="Job listings are now structured records, ready for a CMS editor and a real application endpoint."
          />
          <div className="grid">
            {careers.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                label={item.type}
              />
            ))}
          </div>
          <div className="actions">
            <Link className="button" href="/contact">
              Apply or ask a question
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
