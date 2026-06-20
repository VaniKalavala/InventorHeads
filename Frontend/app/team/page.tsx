import { ContentCard } from "@/components/content-card";
import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

export default function TeamPage() {
  const page = getPage("team");
  const team = getCollection("team");

  return (
    <>
      <PageHero title={page.title} summary={page.summary} image={page.heroImage} />
      <section className="section section--white">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Team"
            title="People behind the work"
            summary="The old team custom post type is represented as CMS-ready profile content."
          />
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
