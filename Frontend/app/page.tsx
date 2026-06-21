import Link from "next/link";
import { ContentCard } from "@/components/content-card";
import { HomeVideoBackground } from "@/components/home-video-background";
import { SectionHeading } from "@/components/section-heading";
import { StudioArtSlider } from "@/components/studio-art-slider";
import { getCollection, getPage } from "@/lib/cms";

export default function HomePage() {
  const page = getPage("home");
  const portfolio = getCollection("portfolio");
  const shows = getCollection("shows").filter((item) => item.videoEmbedUrl).slice(0, 3);

  return (
    <>
      <section className="home-video-hero">
        <HomeVideoBackground />
        <div className="home-video-hero__copy">
          <h1>Inventor Heads creates visual worlds.</h1>
          <p>
            Visual effects, animation, production design, and creative technology
            for films, shows, commercials, and digital-first stories.
          </p>
          <div className="home-capabilities" aria-label="Studio capabilities">
            <span>VFX</span>
            <span>Animation</span>
            <span>Production</span>
            <span>Creative Tech</span>
          </div>
          <div className="actions">
            <Link className="button" href="/portfolio">
              View Portfolio
            </Link>
            <Link className="button button--secondary" href="/shows">
              Watch Shows
            </Link>
          </div>
        </div>
      </section>
      <section className="section section--white">
        <div className="section-inner studio-intro">
          <SectionHeading
            eyebrow="Studio"
            title="From idea to final frame."
            summary="Inventor Heads brings production craft, animation, visual effects, and technical workflows together for video-led storytelling."
          />
          <StudioArtSlider />
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
            eyebrow="Latest"
            title="Shows and films"
            summary="Video-led projects presented as embedded, in-site players."
          />
          <div className="grid">
            {shows.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                videoEmbedUrl={item.videoEmbedUrl}
                label={item.category}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
