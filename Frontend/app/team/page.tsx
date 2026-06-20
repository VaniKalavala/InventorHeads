import Image from "next/image";
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
          <div className="team-grid">
            {team.map((member) => (
              <article className="team-profile-card" key={member.name}>
                <div className="team-profile-card__image">
                  <Image src={member.image} alt={member.name} width={420} height={420} />
                </div>
                <div className="team-profile-card__body">
                  <p className="item-label">{member.role}</p>
                  <h2>{member.name}</h2>
                  <p>{member.bio}</p>
                  {"linkedinUrl" in member ? (
                    <a
                      className="button"
                      href={member.linkedinUrl}
                      target="_blank"
                      rel="noreferrer"
                    >
                      LinkedIn Profile
                    </a>
                  ) : null}
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
