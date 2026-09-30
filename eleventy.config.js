export default function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("src/css");
  eleventyConfig.addPassthroughCopy("src/img");
	eleventyConfig.addPassthroughCopy("src/favicon.ico");
	eleventyConfig.addPassthroughCopy("src/robots.txt");
	eleventyConfig.addWatchTarget("src/css/");

  return {
    dir: {
      input: "src",
      output: "dist"
    },
		// pathPrefix: "/getadv/"
  };
}