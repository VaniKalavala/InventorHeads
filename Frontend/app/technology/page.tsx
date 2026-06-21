import { getCollection, getPage } from "@/lib/cms";

export default function TechnologyPage() {
  const page = getPage("technology");
  const technologies = getCollection("technologies");

  return (
    <section className="technology-market">
      <div className="technology-market__inner">
        <div className="technology-market__copy">
          <p>Inventor Heads</p>
          <h1>
            Animation production needs a more{" "}
            <span>transparent pipeline.</span>
          </h1>
          <p>
            We organize story, assets, reviews, and delivery into one clearer
            workflow so creative decisions move faster from concept to final
            frame.
          </p>
          <a href="#technology-tools">Read More</a>
        </div>

        <div className="technology-market__panel" id="technology-tools">
          {technologies.map((item, index) => (
            <article className="technology-tool" key={item.title}>
              <span>{String(index + 1).padStart(2, "0")}</span>
              <h2>{item.title}</h2>
              <p>{item.description}</p>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}
