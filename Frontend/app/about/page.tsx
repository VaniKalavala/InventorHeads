import { ContentCard } from "@/components/content-card";
import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

export default function AboutPage() {
  const page = getPage("about");
  const team = getCollection("team");

  return (
    <>
      <PageHero title={page.title} summary={page.summary} image={page.heroImage} />
      <section className="section section--white">
        <div className="section-inner split">
          <SectionHeading
            eyebrow="Studio"
            title="Production craft with technical depth"
            summary="The old About and Team templates queried WordPress records directly. This rebuild separates presentation from content so the same team data can power multiple pages."
          />
          <div className="panel">
            <h2>Cleaner content ownership</h2>
            <p>
              About copy, team profiles, careers, and shows now live in
              structured CMS fields instead of page-specific PHP loops.
            </p>
          </div>
        </div>
      </section>
      <section className="section">
        <div className="section-inner">
          <SectionHeading title="Team Preview" />
          <div className="grid grid--two">
            {team.map((member) => (
              <ContentCard
                key={member.name}
                title={member.name}
                description={member.bio}
                image={member.image}
                label={member.role}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
