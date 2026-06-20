import Image from "next/image";

type ContentCardProps = {
  title: string;
  description: string;
  image?: string;
  videoEmbedUrl?: string;
  label?: string;
};

export function ContentCard({
  title,
  description,
  image,
  videoEmbedUrl,
  label
}: ContentCardProps) {
  return (
    <article className="content-card">
      {videoEmbedUrl ? (
        <div className="content-card__image">
          <iframe
            src={videoEmbedUrl}
            title={`${title} video player`}
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowFullScreen
          />
        </div>
      ) : image ? (
        <div className="content-card__image">
          <Image src={image} alt="" width={720} height={460} />
        </div>
      ) : null}
      <div className="content-card__body">
        {label ? <p className="item-label">{label}</p> : null}
        <h2>{title}</h2>
        <p>{description}</p>
      </div>
    </article>
  );
}
