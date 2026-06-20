import { ContentCard } from "@/components/content-card";
import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

export default function ServicesPage() {
  const page = getPage("services");
  const services = getCollection("services");

  return (
    <>
      <PageHero title={page.title} summary={page.summary} image={page.heroImage} />
      <section className="section section--white">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Services"
            title="Production capabilities"
            summary="A direct replacement for the old services PHP template, without query_posts or plugin-dependent image loops."
          />
          <div className="grid grid--two">
            {services.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                image={item.image}
                videoEmbedUrl={"videoEmbedUrl" in item ? item.videoEmbedUrl : undefined}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
