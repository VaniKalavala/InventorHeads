import Link from "next/link";
import { ContentCard } from "@/components/content-card";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

const homeVideos = [
  {
    title: "Feature Film",
    embedUrl: "https://www.youtube.com/embed/pZIW7H1QIiw",
    description: "Film showcase playing directly inside the Inventor Heads website."
  },
  {
    title: "Production Reel",
    embedUrl: "https://www.youtube.com/embed/AUoUWoAIHXU",
    description: "A production and pre-production video reel embedded on the home page."
  }
];

export default function HomePage() {
  const page = getPage("home");
  const portfolio = getCollection("portfolio");
  const services = getCollection("services").slice(0, 3);

  return (
    <>
      <section className="home-video-hero">
        <div className="home-video-hero__copy">
          <p className="eyebrow">{page.eyebrow}</p>
          <h1>{page.title}</h1>
          <p>{page.summary}</p>
          <div className="actions">
            <Link className="button" href="/portfolio">
              View Portfolio
            </Link>
            <Link className="button button--secondary" href="/shows">
              Watch Shows
            </Link>
          </div>
        </div>
        <div className="home-video-slider" aria-label="Home video slider">
          {homeVideos.map((video) => (
            <article className="home-video-slide" key={video.title}>
              <div className="home-video-slide__player">
                <iframe
                  src={video.embedUrl}
                  title={`${video.title} video player`}
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowFullScreen
                />
              </div>
              <div className="home-video-slide__body">
                <h2>{video.title}</h2>
                <p>{video.description}</p>
              </div>
            </article>
          ))}
        </div>
      </section>
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
